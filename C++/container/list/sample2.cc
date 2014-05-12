#include <list>
#include <iostream>

int main() {
	using namespace std;

	list<int> intlist;

	intlist.push_back(3);
	intlist.push_back(6);
	intlist.push_back(2);
	intlist.push_back(4);
	intlist.push_back(8);

	// 降順にソート
	intlist.sort(greater<int>());

	list<int>::iterator it = intlist.begin();
	while (it != intlist.end()) {
		cout << *it << endl;
		it++;
	}

	return 0;
}
