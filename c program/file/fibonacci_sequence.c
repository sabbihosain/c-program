#include <stdio.h>
int main()
{
   int revnum=0,num=2345,rem;
   //scanf("%d",&num);
   while(num!=0)
   {
     rem=num%10;
     revnum=(revnum*10)+rem;
     num/=10;
   }
   printf("%d",revnum);
   getch();
  return 0;
}

