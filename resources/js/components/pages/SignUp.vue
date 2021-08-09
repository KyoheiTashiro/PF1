<template>
  <div>
    <HeaderAuth />
    <div class="card">
      <p>新規登録</p>
      <div class="form">
        <input placeholder="ユーザーネーム" type="text" />
        <input placeholder="メールアドレス" type="email" />
        <input placeholder="パスワード" type="password" />
        <button @click="auth">新規登録</button>
        <p>────── もしくは ──────</p>
       <button>Twitterで新規登録</button>
       <p class="account-yes">※すでにアカウントお持ちの方は<span @click="$router.push('/login')">コチラ</span></p>
      </div>
    </div>
    <FooterAuth />
  </div>
</template>

<script>
import HeaderAuth from "../components/HeaderAuth";
import FooterAuth from "../components/FooterAuth";
export default {
  components: {
    HeaderAuth,
    FooterAuth,
  },
};
</script>

<style scoped>
button {
  width: 200px;
  text-align: center;
  font-weight: bold;
  padding: 8px 0 10px;
  color: black;
  background-color: white;
  border-radius: 25px;
  cursor: pointer;
}
.card {
  margin: 100px auto;
  width: 350px;
  background: black;
  border-radius: 5px;
  padding: 20px;
}
.card p {
  color: white;
  font-weight: bold;
  text-align: center;
}
input {
  margin-top: 15px;
  width: 80%;
  border-radius: 10px;
  padding: 10px;
  border: 1px solid black;
  color: black;
}
.form {
  text-align: center;
}
.form button {
  margin-top: 15px;
}
.form p{
  color: white;
  padding-top:20px;
}
.account-yes span{
  color: white;
  text-decoration: underline;
  cursor: pointer;
}
</style>