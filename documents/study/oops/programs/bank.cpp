#include<iostream>
using namespace std;
class bank
{
    private:
char name[20];
long accno;
    float balance;
   char type;
     public:
    void getdata(char n[],long no, char t,float amt)
    {
        strcpy(name,n);
        accno=no;
        type=t;
        balance=amt;
}

   void deposit()
    {
    float amt;
        cout<<"\nEnter the amount to be deposited ";
    cin>>amt;
        balance=balance+amt;
}    

    void withdraw()
    {
float amt;
cout<<"\nEnter the amount to be withdraw ";
cin>>amt;
        if((balance-amt)<1000)
{
cout<<"\namount cannot be withdraw\n";
}
        else
{
        cout<<"amount withdraw successful";
balance=balance-amt;
    }
        }
   void display()
{
cout<<"\nname = "<<name;
cout<<"\nbalance= "<<balance;
}
};
int main()
    {
      bank a;
        a.getdata("aman",12567,'s',10000);
        a.display();
    a.deposit();
    a.display();
    a.withdraw();
    a.display();
    
}
