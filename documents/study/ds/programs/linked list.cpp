#include<iostream>
#include<malloc.h>
using namespace std;
int main()
{
    int n;
cout<<"Enter n no. of data";
    cin>>n;
    //updating
    
    struct node
{
int data;
struct node *link;

};
struct node *first,*second,*third;
first=(struct node *) malloc (sizeof(struct node));
first->data=10;
second=(struct node *) malloc (sizeof(struct node));
    second->data=20;
third=(struct node *) malloc (sizeof(struct node));
    third->data=30;
cout<<first->data<<endl<<second->data<<endl<<third->data;
}