#include<stdio.h>
int main()
{
char o;
int num1,num2;


printf("select an operator either + or - or * or /\n");
scanf("%c",&o);
    printf("\nEnter two operands\n");
scanf("%d%d",&num1,&num2);

switch(o)
{
case '+':
printf("%d + %d = %d",num1,num2,num1+num2);
break;
case '-':
printf("%d - %d = %d",num1,num2,num1-num2);
break;
case '*':
printf ("%d * %d = %d",num1,num2,(num1*num2));
break;
case '/':
printf("%d / %d = %d",num1,num2,num1/num2);
break;
default:
printf("Error! operator is not correct");
break;
}

}