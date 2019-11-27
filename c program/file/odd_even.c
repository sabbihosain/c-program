#include <stdio.h>
int main()
{
   int i;
   for(i=1; i<=100; i++)
   {
       if(i%2==0)
       {
         printf("%d even number\n",i);
       }
       else
       {
         printf("%d odd number\n",i);
       }
   }
  return 0;
}

