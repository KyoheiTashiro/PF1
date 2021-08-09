<template>
  <div>
    <HeaderAuth />
    <div class="card">
      <p>ログイン</p>
      <div class="form">
        <input placeholder="メールアドレス" type="email" />
        <input placeholder="パスワード" type="password" />
        <button>ログイン</button>
        <p>────── もしくは ──────</p>
        <button>Twitterでログイン</button>
        <p class="account-no">
          ※まだアカウントお持ちでない方は<span @click="$router.push('/signup')"
            >コチラ</span
          >
        </p>
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
  padding: 8px 0 10px;
  font-weight: bold;
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
.form p {
  color: white;
  padding-top: 20px;
}
.form button {
  margin-top: 15px;
}
.account-no span {
  color: white;
  text-decoration: underline;
  cursor: pointer;
}
</style>