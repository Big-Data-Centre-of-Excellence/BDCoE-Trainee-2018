#include<stdio.h>
#include<stdlib.h>
struct node 
{
int item;
struct node *next;
} *head,*q,*p;

void main()
{int n,i;
p= (struct node*)malloc(sizeof(struct node));
printf("1st node is created Enter the item to store in it.\n");
scanf("%d",&p->item);
p->next=NULL;
head=p;
printf("Enter how many node you want to crreated");
scanf("%d",&n);
q=head;
for(i=1;i<n;i++)
{
p=(struct node*)malloc(sizeof(struct node));
q->next=p;
printf("Enter the item.\n");
scanf("%d",&p->item);
p->next=NULL;
q=p;
}
q=head;
p=head;
while(p->next!=NULL)
{
printf("%d\n",q->item);
q=q->next;
}
}
