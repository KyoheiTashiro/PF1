<template>
  <div>
     <div class="select-course">
      <div class="course-card">
        <div class="fsw-card" @click="$router.push('/fsw')">
         <p class="text-red-500">富士スピードウェイ</p>
        </div>
      </div>
      <div class="course-card">
        <div class="tc-card" @click="$router.push('/tc')">
         <p>筑波サーキット</p>
        </div>
      </div>
      <div class="course-card">
        <div class="mtg-card" @click="$router.push('/mtg')">
         <p>ツインリンクもてぎ</p>
        </div>
      </div>
     </div>
  </div>
</template>


<style scoped>
.select-course{
  position: relative;
}
.fsw-card{
  /* background-image: url("../assets/fsw-course.jpg"); */
  height: 300px;
  cursor: pointer;
  background-repeat: no-repeat;
}

.fsw-card p{
  color:black;
  font-size: 20px;
  font-weight: bold;
}
.tc-card{
  /* background-image: url("../assets/tc-course.jpg"); */
  height: 300px;
  cursor: pointer;
  background-repeat: no-repeat;
}

.tc-card p{
  color:black;
  font-size: 20px;
  font-weight: bold;
}
.mtg-card{
  /* background-image: url("../assets/mtg-course.jpg"); */
  height: 300px;
  cursor: pointer;
  background-repeat: no-repeat;
}

.mtg-card p{
  color:black;
  font-size: 20px;
  font-weight: bold;
}

</style>