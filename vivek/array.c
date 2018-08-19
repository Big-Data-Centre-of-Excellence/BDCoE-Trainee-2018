#include<stdio.h>
void main ()
{
int A[20],n,d,t=-1;
char ch;
printf("Enter size of array : ");
scanf("%d",&n);
printf("Enter elements : ");
for(int i=0;i<n;i++)
{scanf("%d",&A[i]);}
if(n>=20)
{printf("!!!!!Over Flow !!!!");}
else
{
while((t==-1) ||(ch=='y'|| ch=='Y') && (n<20 || (printf("\n!!!! Over Flow !!!") && 0)))
{t=0;
printf("Enter element you want to insert : ");
scanf("%d",&d);
for(int i=0;i<n-1;i++)
{
for(int j=i+1;j<n;j++)
{
if(A[j]<A[i])
{int t=A[i];A[i]=A[j];A[j]=t;}
}
}
int i;
for(i=0;i<n;i++)
{
if(A[i]>d)
{break;}
}
for(int j=n;j>i;j--)
{
A[j]=A[j-1];
}
A[i]=d;n=n+1;
for(int i=0;i<n;i++)
{printf("%d",A[i]);}
printf("\nWant to insert more elements : ");
while ((getchar()) != '\n');
scanf("%c",&ch);
}
}
}
