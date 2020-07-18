#include<iostream>
#include<malloc.h>
using namespace std;
class linkedlist
{
 int i,j,n,l,s,p,mv,temp;
    struct node
{
int data;  
struct node *link;
}*head[50];
    
     
 public:
      
            //ll
            void ll()
    {
    for(i=1;i<=50;i++)
    {
        head[i]=(struct node*)malloc(sizeof(struct node));
        head[i]->data;
        }
}
      //insertion
  void insertion()
    {
cout<<"Enter no. of vlaues ";
cin>>n;
  cout<<"\nEnter the values\n";
    for(i=1;i<=n;i++)
    {
         cout<<"("<<i<<")     ";
        cin>>head[i]->data;
            }
        }
        
     //insertion in new location
    void newdata()
    {
     cout<<"\nEnter the location where you wish to insert ";
        cin>>l;
 if(head[l]->data==NULL)
            {
      cout<<"\nenter a value ";
        cin>>head[l]->data;
            
            }
        
    if(head[l]->data!=NULL)
        {
        cout<<"\nThe location no. ("<<l<<") is filled\n";
               
            }
    }
    //sorting
    void sorting()
    {
    for(i=1;i<=l-1;i++)
    mv=i;
        for(j=1+i;j<=l;j++)
        {
   if(head[mv]->data>head[j]->data)
            {
    mv=j;
}
}
        
   if(mv!=i)
        {
    temp=head[i]->data;
            head[i]->data=head[mv]->data;
            head[mv]->data=temp;       
}
}
    
 //show values
    void showdata()
    {
    for(i=1;i<=l;i++)
        {
      if(i<=l)
            {
cout<<endl<<"("<<i<<")  "<<head[i]->data<<endl;     
        }
        }
        }
    
    //deletion
   void deletion()
    {
    cout<<"\nEnter the location where you wish to delete ";
        cin>>p;
     if(head[p]->data==NULL)
    {
    cout<<"Deletion is not podible";
}
    else
    {
    for(i=p;i<=l;i++)
        {
        head[i]->data=head[i+1]->data;
    }
}
    }
    
    //search a no.
    void search()
    {
cout<<"\nenter a no. for searching ";
cin>>s;
        for(i=1;i<=50;i++)
        {
        if(head[i]->data==s)
            {
            cout<<"\nThe value "<<s<<" is found at location no. "<<i<<", "<<endl;
             
        }
           
             if(i==l)
    {
cout<<"\n searching is not posdible or successful\n";
                break;
}
   }
}
    };
int main()
{
linkedlist a,b,c;
   a.ll(); 
a.insertion();
a.newdata();
    a.sorting();
    a.showdata();
    a.search();
    a.deletion();
    a.search();
a.showdata();
}