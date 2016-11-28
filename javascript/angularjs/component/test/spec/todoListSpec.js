/**
 * todoList component test sample
 *
 * @see http://qiita.com/suetake/items/98defc18a97f7b4561fe
 */
describe('todoList component test', function() {
  var $compile,
      $rootScope;

  // 各ブロック内のit()が実行される前に必ず実行
  // module()により、todoAppをロードし利用できるようにしている
  beforeEach(module('todoApp'));

  // $compileと$rootScopeへの参照を取得し、先に用意した変数へ格納
  // これによりdiscribe()ブロック内のテストで利用可能になる
  beforeEach(inject(function(_$compile_, _$rootScope_) {
    $compile = _$compile_;
    $rootScope = _$rootScope_;
  }));

  // 各ブロック内のit()が実行された後に必ず実行
  afterEach(inject(function(_$httpBackend_) {
    // @see http://d.hatena.ne.jp/kitokitoki/20150211/p1
    _$httpBackend_.verifyNoOutstandingExpectation();
    _$httpBackend_.verifyNoOutstandingRequest();
  }));

  it('componentが適切な要素へ置換されているか', function() {
    var component = $compile('<todo-list></todo-list>')($rootScope);

    expect(component.html()).toContain('追加');
  });

  it('component初期化後、tasksResource.query()が一回のみ実行されているか',
    inject(function(_tasksResource_) {

    // tasksResourceのqueryメソッドを監視対象とする
    spyOn(_tasksResource_, 'query');

    var component = $compile('<todo-list></todo-list>')($rootScope);

    // 監視下においたメソッドが実行されているか確認
    expect(_tasksResource_.query).toHaveBeenCalled();
    // query()が実行された回数が1回であることを確認
    expect(_tasksResource_.query.calls.count()).toBe(1);

    var controller = component.controller('todoList');

    expect(controller.items).toBeUndefined();
  }));

  it('component初期化後、tasksResource.query()が実行され、controller.itemsへレスポンスを格納できているか',
    inject(function(_$httpBackend_, _tasksResource_) {

    // /api/tasksへGETリクエストされた際のレスポンスを定義
    _$httpBackend_.expectGET('/api/tasks').respond([
      {}, {}, {}, {}, {}
    ]);

    // and.callThrough()とすることで、本来の実装も実行させることができる
    spyOn(_tasksResource_, 'query').and.callThrough();

    var component = $compile('<todo-list></todo-list>')($rootScope);

    // 監視下においたメソッドが実行されているか確認
    expect(_tasksResource_.query).toHaveBeenCalled();

    var controller = component.controller('todoList');
    // /api/tasksへのリクエストはまだ完了していないので、controller.items.length = 0となる
    expect(controller.items.length).toBe(0);

    // 保留中のリクエストを完了させる
    _$httpBackend_.flush();

    // リクエスト完了後のcontroller.items.lengthの確認
    expect(controller.items.length).toBe(5);
  }));

  it('入力欄が空の場合、保存処理が動かないか', inject(function(_$controller_, _tasksResource_) {
    // コントローラーの挙動のみを確認するので、直接コントローラーを取得
    var controller = _$controller_('todoListController', {$scope: $rootScope});

    // 未入力の場合、通信が走らないことを確認するため、saveを監視
    // Resourceのsave()が実行された場合は例外をスローする
    spyOn(_tasksResource_, 'save').and.throwError('保存処理が走っています');

    var result = controller.addTask();

    // 処理結果の値がundefinedであることの確認
    expect(result).toBeUndefined();
  }));

  it('入力値がある場合、正常に保存処理が動くか', inject(function(_$controller_, _$httpBackend_, _tasksResource_) {
    // /api/tasksへGETリクエストされた際のレスポンスを定義
    _$httpBackend_.expectPOST('/api/tasks').respond();

    var controller = _$controller_('todoListController', {$scope: $rootScope});
    // 入力値を設定
    controller.data.text = 'test task';
    spyOn(_tasksResource_, 'save').and.callThrough();

    // 保存処理を実行
    controller.addTask();

    // Resourceのsave()が呼ばれているか
    expect(_tasksResource_.save.calls.count()).toBe(1);
    // controller.data.textがクリアされているか
    expect(controller.data.text).toBeUndefined();

    // /api/tasksへのリクエストはまだ完了していないので、controller.items.length = 0となる
    expect(controller.items.length).toBe(0);

    // 保留中のリクエストを完了させる
    _$httpBackend_.flush();

    // controller.itemsの件数が増えているか
    expect(controller.items.length).toBe(1);
    // 追加したタスクが登録されているか
    expect(controller.items[0].title).toBe('test task');
  }));

  it('正常に削除処理が行えるか', inject(function(_$controller_, _$httpBackend_) {
    // /api/tasksへGETリクエストされた際のレスポンスを定義
    _$httpBackend_.expectPOST('/api/tasks').respond();

    var controller = _$controller_('todoListController', {$scope: $rootScope});
    // 入力値を設定
    controller.data.text = 'test task';
    // 保存処理を実行
    controller.addTask();
    // 保留中のリクエストを完了させる
    _$httpBackend_.flush();

    // タスクが追加されたか
    expect(controller.items.length).toBe(1);

    // 存在しないindexの削除処理を実行した場合、例外がスローされるか
    expect(controller.removeTask.bind(null, 99)).toThrow();

    // タスク削除時に走るリクエストの受け口を準備
    _$httpBackend_.expectDELETE(/\/api\/tasks\/\d+/).respond();
    // 追加したタスクを削除
    controller.removeTask(0);

    // $remove()の通信が完了していないので、タスクが削除されていないか確認
    expect(controller.items.length).toBe(1);

    // $remove()の通信を完了させる
    _$httpBackend_.flush();
    // タスクが削除されたか確認
    expect(controller.items.length).toBe(0);
  }));
});
