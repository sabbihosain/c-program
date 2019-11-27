#include <stdio.h>
int main()
{
    int n,r;
    scanf("%d %d",&n,&r);
    printf("%d",ncr(n,r));
    return 0;
}
int ncr(int n,int r)
{
    int s=1,i,j=1;
    for(i=0; i<=r-1; i++)
    {
       s=s*(n-i);
    }
    for(i=1; i<=r; i++)
    {
        j=j*i;
    }
    return s/j;
}
