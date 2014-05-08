#include <vector>
#include <iostream>

int main() {
	using namespace std;

	vector<int> array1;
	vector<int> array2;
	int i;

	for (i = 0; i < 10; i++) {
		array1.push_back(i);
		array2.push_back(9 - i);
	}

	if (array1 == array2) {
		cout << "一致しました。" << endl;
	}

	array2.clear();
	cout << array1.size() << endl;
	if (array2.empty()) {
		cout << "array2は空です" << endl;
	}

	for (i = 0; i < array1.size(); i++) {
		array1.pop_back();
	}

	return 0;
}
