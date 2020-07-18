#include <iostream> 
#include <string>
 using namespace std;
 class person 
				{ 
				public: //here 'public' for all ,'private' means for data members. when we writes private here then it gaves error.
				 string name; 
				int age;
				 }; 
int main()
 { 
				person a, b;
			cout<<"Enter the neme of first student"<<endl;
				cin>>a.name; //by public access specifier we write the value of name variable, 'private' protect name variable for writing;
				cout<<"Enter the name of second student"<<endl;
				cin>>b.name;
				cout<<"Enter the age of first student\n";
				cin>>a.age;
				cout<<"Enter the age of second student\n";
				cin>>b.age;
				
				 cout << a.name << ": " << a.age << endl; 
				cout << b.name << ": " << b.age << endl; 
				return 0;
				 }