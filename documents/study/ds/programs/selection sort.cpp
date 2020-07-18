#include<iostream>
using namespace std;
int main()
{
int i,imin,j,n,temp,a[100];
				
cout<<"Enter number of element\n";
				cin>>n;
				
				cout<<"\nEnter "<<n<<" elements\n";
				for(i=1;i<=n;i++)
				{
			cout<<"__________\n| "<<i<<". | ";
									//enter the no. of elements
								cin>>a[i];
}
				
				for(i=1;i<=n-1;i++)
				{
			imin=i;	
								
								for(j=i+1;j<=n;j++)
								{
if(a[imin]>a[j])
												{
								imin=j;
}}
								//this loop is used for inseet minimum value(imin) in first element(i)
								if(imin!=i)
								{
			temp=a[i];
a[i]=a[imin];
								a[imin]=temp;					
}}

				cout<<"\nSorted list in ascending order:\n";
				//this loop is used for print list in sort list
				for(i=1;i<=n;i++)
{
				cout<<"____________\n| "<<i<<". | "<<a[i]<<" |\n";
}
}