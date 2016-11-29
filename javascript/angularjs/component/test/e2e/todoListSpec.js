/**
 * protractor sample
 * @see http://qiita.com/suetake/items/08012982b57f32a62721
 */
describe('todoList component E2Eテスト', function() {
  // タスク入力用のinput要素の参照取得
  var taskInput = element(by.model('$ctrl.data.text'));
  // 追加ボタンの参照取得
  var addButton = element(by.buttonText('追加'));
  // タスク表示用リピート要素の参照取得
  var tasks = element.all(by.repeater('item in $ctrl.items'));

  beforeEach(function() {
    // todoComponentを使用しているページへアクセス
    browser.get('http://localhost:3000');
  });

  it('初期タスクとして3個のタスクがレンダリングされているか', function() {
    // by.repeater()で指定した要素3個レンダリングされているか
    expect(tasks.count()).toEqual(3);
  });

  it('タスク追加、削除の流れが正常に行えるか', function() {
    // タスク入力用inputに指定の文字列を入力
    taskInput.sendKeys('追加タスク');
    // 追加ボタンクリック
    addButton.click();
    // 追加後にリピート要素が4個になっているか
    expect(tasks.count()).toEqual(4);
    // 追加したタスクのテキストがinputへ入力したものと一致しているか
    expect(tasks.last().$('span').getText()).toEqual('追加タスク');

    // タスクを古い順から3個削除する
    tasks.last().$('button').click();
    tasks.last().$('button').click();
    tasks.last().$('button').click();

    // リピート要素が1個になっているか
    expect(tasks.count()).toEqual(1);
  });
});
