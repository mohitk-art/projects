/* fuction in main() */
#include<iostream>
using namespace std;
inline float mul(float x,float y)
{
return(x*y);
}
inline float div(float r,float q)
{
return(q/q);
}
main()
{
float a,b;
    cout<<"Enter the value of a and b\n";
    cin>>a>>b;
    cout<<"Multiplication of two no. is "<<mul(a,b)<<endl;
     cout<<"Divition of two no. is "<<div(a,b);
}