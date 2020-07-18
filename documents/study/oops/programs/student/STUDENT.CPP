#include<iostream.h>
#include<conio.h>
class student
{
char sname[20];
int rollno,marks;
public:
void read()
{
cout<<"enter the name, roll no and roll no of student\n";
cin>>sname>>rollno>>marks;
}
void show()
{
cout<<"Name of student "<<sname<<"\nRoll no of student "<<rollno<<"\nmarks of student "<<marks;
}
};
void main()
{
student a;
a.read();
a.show();
getch();
clrscr();
}