Create 2 Class Named "Book" and "Customer" in there respective files with properties as below

Book
 - isbn : int
 - title : string
 - author : string
 - available : int
 + getCopy() : bool
 + addCopy(int num) : bool


 Customer
 - id (int)
 - firstName (string)
 - lastName (string)
 - email (string)


 write constructor , getters[ie. getTitle() etc ] and setters [ie. setEmail("a@b.com") ] for both classes and implement __toString method to print object.

 Extra point if you can use __call, __get and __set method to implement getter and setter.

Now create a separate php file to manipulate those classes and show output.