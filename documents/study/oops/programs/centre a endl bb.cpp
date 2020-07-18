#include<iostream>
int main()
{
		char a,n;
				int b,c;
			std::cout<<"Enter The Character ";
								std::cin>>n;
				for(a='a';a<=n;a++)
				{
							for(b=n-1;b>=a;b--)
								{
								std::cout<<" ";
				}
									// below for loop is using for no of *s
									for(c='a';c<=a;c++)
{
								std::cout<<char(a)<<" ";
}
std::cout<<"\n\n";
}
				}