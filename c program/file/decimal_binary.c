#include <stdio.h>
int main()
{
   int binary,decimal=0,i=0,rev;
   scanf("%d",&binary);
   while(binary!=0)
   {
      rev=binary%10;
      decimal+=rev*pow(2,i);
      binary/=10;
      i++;
   }
   printf("%d",decimal);
  return 0;
}

