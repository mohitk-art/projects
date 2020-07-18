#include<stdio.h>
int main()
{
  char feb;
    int days;
    printf("Enter 1 if year is leap year otherwise enter 0: ");
   scanf("%d",&feb);
    days=(feb=='1')?29:28; 
    //'29' in true condition(1) and '28' in false condition(0)'
    printf("Number of days in February=%d",days);
    return 0;
    
}