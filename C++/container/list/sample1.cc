#include <list>
#include <iostream>

int main() {
	using namespace std;

	list<int> intlist;
	int i;

	for (i = 0; i < 10; i++) {
		intlist.push_back(i);
	}

	cout << intlist.size() << endl;

	for (i = 0; i < 10; i++) {
		intlist.pop_back();
	}

	cout << intlist.size() << endl;

	return 0;
}
