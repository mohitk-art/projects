#include<iostream.h>
#include<conio.h>
class abc
{
int c,n,d;
public:
abc()
{
c=0;
}
abc(int a)
{
c=a;
}
void showdata()
{
cout<<endl<<c<<endl;
}
void operator ++()
{
//abx
c++;
}
};
void main()
{
abc c1,c2(10);
c1++;
++c1;
c1.showdata();
c2++;
c2.showdata();
getch();
clrscr();
}