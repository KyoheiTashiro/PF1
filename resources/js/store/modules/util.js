const getters = {};

const state = {
  login: false,
  // LoginId: '',
};

const mutations = {
  stateLogin(state) {
    state.login = true;
    // console.log('stateLogin ok');
  },
  // stateLoginId(state,loginid) {
  //   // console.log('stateLoginId ok');
  //   state.LoginId = loginid;
  // },
};

const actions = {};

export default {
  namespaced: true,
  getters,
  state,
  mutations,
  actions,
};
