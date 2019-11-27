#include <stdio.h>
int main()
{
   int octal=0,decimal,temp=1,rev;
   scanf("%d",&decimal);
   while(decimal!=0)
   {
      rev=decimal%8;
      octal+=rev*temp;
      temp*=10;
      decimal/=10;
   }
   printf("%d",octal);
  return 0;
}

