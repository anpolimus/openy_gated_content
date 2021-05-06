export default {
  state: {
    peerConnected: false,
    peerConnection: null,
  },
  mutations: {
    setPeerConnected(state, value) {
      state.peerConnected = value;
    },
    setPeerConnection(state, value) {
      state.peerConnection = value;
    },
  },
  getters: {
    peerConnected: (state) => state.peerConnected,
    peerConnection: (state) => state.peerConnection,
  },
};
