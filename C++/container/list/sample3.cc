#include <list>
#include <iostream>

int main() {
	using namespace std;

	list<int> intlist1, intlist2;

	intlist1.push_back(3);
	intlist1.push_back(6);
	intlist1.push_back(2);
	intlist2.push_back(8);
	intlist2.push_back(4);
	intlist2.push_back(5);

	intlist1.sort();
	intlist2.sort();

	intlist1.merge(intlist2);

	list<int>::iterator it = intlist1.begin();
	while (it != intlist1.end()) {
		cout << *it << endl;
		it++;
	}

	return 0;
}
