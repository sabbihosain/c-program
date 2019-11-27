#include <stdio.h>
int main()
{
    int n=9,x=6;
    int mid,left=0,rigth=n;
    int a[]={5,8,3,7,4,1,2,9,6};
    while(left<=rigth)
    {
      mid=(left+rigth)/2;
      if(a[mid]==x)
      {
       return mid;
      }
      else if(a[mid]<x)
      {
         left=mid+1;
      }
      else
      {
       rigth=mid-1;
      }
    }
    return 0;
}

