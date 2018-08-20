#include<stdio.h>
#include<stdlib.h>
struct node
{
struct node *link;
int info;
};
struct node *start=NULL;
void createnode()
{
struct node *temp,*t;
int i=0,j=0,n;
printf("enter the number of nodes");
scanf("%d",&n);
while(i<n)
{
temp=(struct node *)malloc(sizeof(struct node));
printf("enter the info");
scanf("%d",&temp->info);
temp->link=start;
start=temp;
i++;
}
while(j<n)
{
t=start;
printf("%d",t->info);
t=t->link;
start=t;
j++;
}
}
void main()
{
createnode();
}
