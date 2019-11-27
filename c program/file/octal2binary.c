#include <stdio.h>
int main()
{
   int decimalNum=0,octalNum=14,revNum,i=0,binaryNum=0;
   printf("OctalNumber:%d\n",octalNum);
   while(octalNum!=0)
   {
     revNum=octalNum%10;
     decimalNum+=revNum*pow(8,i);
     octalNum/=10;
     i++;
   }
    printf("DecimalNumber:%d\n",decimalNum);
    binaryNum=numberconvert(decimalNum);
    printf("BinaryNumber:%d\n",binaryNum);
   return 0;
}
int numberconvert(int decimalNum)
{
  int revNum,temp=1,binaryNum=0;
  while(decimalNum!=0)
   {
     revNum=decimalNum%2;
     binaryNum+=revNum*temp;
     decimalNum/=2;
     temp*=10;
   }
   return binaryNum;
}
