#include <list>
#include <iostream>

int main() {
	using namespace std;

	list<int> intlist;
	int i;

	for (i = 0; i < 10; i++) {
		intlist.push_back(i);
	}

	list<int>::iterator it = intlist.begin();
	while (it != intlist.end()) {
		cout << *it << endl;
		++it;
	}

	return 0;
}
