#include<iostream>
using namespace std;
class cal
{
private:
int num1,num2;
    char o;
public:

    void readdata()
    {
    cout<<"select an operator either + or - or * or /\n";
cin>>o;
        cout<<"\nEnter two operand\n";
cin>>num1>>num2;
}
    
void showdata()
    {
        switch(o)
{
case '+':
cout<<num1<<"+"<<num2<<" = "<<num1+num2;
break;
case '-':
cout<<num1<<"-"<<num2<<" = "<<num1-num2;
break;
case '*':
cout<<num1<<"*"<<num2<<" = "<<num2*num2;
break;
case '/':
cout<<num1<<"/"<<num2<<" = "<<num1/num2;
break;
            default:
cout<<"Error! operator is not correct";
break;
}
}
        
 };
  int main()
{
cal a;
a.readdata();
    a.showdata();
}