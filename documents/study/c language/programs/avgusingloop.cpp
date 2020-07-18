#include<iostream>
using namespace std;
int main()
{
float avg;
int n,i,num,sum=0;
cout<<"Enter maximun no.of inputs\n";
cin>>n;
for(i=1;i<=n;i++)
    {
cout<<"enter no. "<<i<<endl;
cin>>num;
        if(num<0)
        break;
        sum=num+sum;
        
}
    avg=sum/(i-1);
    cout<<"Average = "<<avg;
}