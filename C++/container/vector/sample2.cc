#include <vector>
#include <string>
#include <iostream>
#include <stdlib.h>

int main() {
	using namespace std;

	vector<string> array;
	int i;

	array.push_back("a");
	array.push_back("b");
	array.push_back("c");
	array.push_back("d");
	array.push_back("e");

	for (i = 0; i < array.size(); i++) {
		cout << array[i] << endl;
	}

	return EXIT_SUCCESS;
}
