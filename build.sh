
cd /Users/ljx/Downloads/新dede168/整站源码/易企秀V12.9源码/易企秀12.9主程序

docker build -f /Users/ljx/code/docker-eqx/php.Dockerfile -t cleocn/php:5.3-code .


docker login --username=100000444071 ccr.ccs.tencentyun.com

docker pull ccr.ccs.tencentyun.com/cleocn/nginx:1.9
docker pull ccr.ccs.tencentyun.com/cleocn/php:5.3


#140
docker-machine ssh tx2 mkdir -p  {/data/h5/Conf/,/data/h5/phptmp,/data/h5/Uploads,/data/h5/src}

docker-machine  scp -r ./Uploads/   tx2:/data/h5/Uploads/

docker-machine  scp -r ./Application/Common/Conf/   tx2:/data/h5/


