#include <deque>
#include <iostream>

int main() {
	using namespace std;

	deque<int> intdeque;
	int i;

	intdeque.push_back(10);
	intdeque.push_back(20);
	// vectorではできない
	intdeque.push_front(30);

	for (i = 0; i < intdeque.size(); i++) {
		cout << intdeque[i] << endl;
	}

	return 0;
}
