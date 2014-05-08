#include <vector>
#include <iostream>
#include <stdlib.h>

int main() {
	using namespace std;

	vector<int> array;
	int i;

	for (i = 0; i < 10; i++) {
		array.push_back(i);
	}

	vector<int>::iterator it = array.begin();
	while (it != array.end()) {
		cout << *it << endl;
		++it;
	}

	return EXIT_SUCCESS;
}
