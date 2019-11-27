#include <stdio.h>
int main()
{
   int revnum,num,rev,count=0;
   scanf("%d",&num);
   while(num!=0)
   {
     rev=num%10;
     revnum=revnum*10+rev;
     num/=10;
     count++;
   }
   printf("%d",count);
  return 0;
}

