object fizzbuzz {
	def main(args: Array[String]) {
		fizzbuzz(30)
	}

	def fizzbuzz(args: Int) {
		(1 to args) map { i => 
			(i % 3, i % 5) match {
				case (0, 0) => i + " : fizzbuzz "
				case (0, _) => i + " : fizz"
				case (_, 0) => i + " : buzz"
				case (_)    => i
			}
		} foreach println
	}
}
