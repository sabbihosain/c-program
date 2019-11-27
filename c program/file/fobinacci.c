#include <stdio.h>
int main()
{
   int n1=0,n2=1,n3,num,i;
   scanf("%d",&num);
   for(i=1; i<=num; i++)
   {
     n3=n1+n2;
     printf("%d ",n3);
     n1=n2;
     n2=n3;
   }
  return 0;
}

