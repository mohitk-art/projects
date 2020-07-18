#include<iostream>
int main()
{
				int a,b,c,n;
			std::cout<<"Enter The no of Rows ";
								std::cin>>n;
				for(a=1;a<=n;a++)
				{
							// below for loop is using for space
									for(b=n-1;b>=a;b--)
				{
							std::cout<<" ";
				}
								// below for loop is using for no of *s
									for(c=1;c<=a;c++)
{
								std::cout<<"*";
}
std::cout<<"\n";
}
				}