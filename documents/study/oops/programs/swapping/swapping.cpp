#include<iostream>
using namespace std;
int main()
{
int a,b,t;
cout<<"Enter the values\n"<<"a ";
    cin>>a;
cout<<"\nb ";
    cin>>b;
t=b;
    b=a;
    a=t;
    cout<<"\nSwapping of a and b is\n"<<"a "<<a<<"\nb "<<b;

}