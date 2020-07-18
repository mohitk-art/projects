#include<iostream>
using namespace std;

int main()
{
clrscr();
				int a[2][2],b[2][2],c[2][2],i,j,k;
		cout<<"Enter elements in first matrix\n\n";
						for(i=0;i<2;i++)
				{
				for(k=0;k<2;k++)
{
cout<<"a"<<i<<k<<"  ";
												cin>>a[i][k];
}
}
				
cout<<"\nEnter the elements of 2nd mayrix\n\n";
for(k=0;k<2;k++)
{
								for(j=0;j<2;j++)
								{
												cout<<"b"<<k<<j<<"  ";
cin>>b[k][j];
}
								}
				
			//multiplication of matrix
				for(i=0;i<2;i++)
{
				for(j=0;j<2;j++)
{
c[i][j]=0;
								for(k=0;k<2;k++)
{
												c[i][j]=c[i][j]+a[i][k]*b[k][j];
								}
}
}
				
cout<<"\nThe result is :-\n";
for(i=0;i<2;i++)
				{
				for(j=0;j<2;j++)
								{
								cout<<"c"<<i<<j<<"  "<<c[i][j]<<endl;
				}
}
}