#include<iostream>
int main()
{
int arr[100],loc,value,i,n;
				
std::cout<<"Enter a number of element\n";
				std::cin>>n;
				
				std::cout<<"Enter elements\n";
for(i=1;i<=n;i++)
{
std::cout<<"________\n|("<<i<<")| ";
								std::cin>>arr[i];
								std::cout<<"|";
}
				std::cout<<"\n";
				std::cout<<"Enter a location to insert an element\n";
				std::cin>>loc;

std::cout<<"Enter a value\n";
				std::cin>>value;

				for(i=n;i>=loc;i--)
				{
				arr[i]=arr[i];
								arr[loc]=value;
}
				
				std::cout<<"Result of an array \n";
				for(i=1;i<=n;i++)
{
std::cout<<"________\n|("<<i<<") "<<arr[i]<<"\n|";
}
}