#include<stdio.h>
#include<conio.h>
void read_arr(int a[10][10],int row,int col)
{
    int i,j;
    for(i=1;i<=row;i++)
    {
        for(j=1;j<=col;j++)
        {
            scanf("%d",&a[i][j]);
        }
    }
}

void add_arr(int ma[10][10],int mb[10][10],int mc[10][10],int row,int col)
{
    int i,j;
    for(i=1;i<=row;i++)
    {
        for(j=1;j<=col;j++)
        {
            mc[i][j]=ma[i][j]+mb[i][j];
        }
    }
}

void print_arr(int mc[10][10],int row,int col)
{
    int i,j;
    for(i=1;i<=row;i++)
    {
        for(j=1;j<=col;j++)
        {
            printf("%d ",mc[i][j]);
        }
        printf("\n");
    }
}

int main()
{
    int m1[10][10],m2[10][10],m3[10][10],i,j,row,col;
    
    printf("Enter no. of row and column\n");
    scanf("%d%d",&row,&col);
    
    printf("Enter 1st matrix\n");
 read_arr(m1,row,col);
    
    printf("Enter 2nd matrix\n");
    read_arr(m2,row,col);
    
    add_arr(m1,m2,m3,row,col);
    printf("\nAddition of two matrix is\n");
    print_arr(m3,row,col);
    }