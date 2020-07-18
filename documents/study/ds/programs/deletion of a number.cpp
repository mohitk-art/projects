#include<iostream>
int main()
{
int arr[100],p,n,c;
				
				std::cout<<"Enter number of elements in array\n";
				std::cin>>n;
				
std::cout<<"Enter "<<n<<" element\n";
				for(c=1;c<=n;c++)
{
std::cout<<"__________\n|("<<c<<")| ";
								std::cin>>arr[c];
								std::cout<<"|";
}

				std::cout<<"\nEnter the location where you wish to delete element\n";
std::cin>>p;
				
if(p>n)
				{
				std::cout<<"Deletion not possible\n";
}
				else
{
for(c=p;c<=n;c++)
								{
								arr[c]=arr[c+1];
				}
												std::cout<<"Resultent:-\n";
								for(c=1;c<n;c++)
{
std::cout<<"____________\n|("<<c<<")| "<<arr[c]<<"|\n";
}
}
}