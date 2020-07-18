#include<iostream>
using namespace std;
int main()
{
    int i,num,product;
    for(i=1,product=1;i<=4;i++)
{
    cout<<"Enter number:\n";
        cin>>num;
if(num==0)
        continue;// if num=0, then product*num=0 but it will be continue .'0' vlue act as indivisible or comment;
product=product*num;
}
    cout<<"Product = "<<product;
}