// user 정보만 담고 있는 store

// 초기값
const initialState = {
  isLoggedIn: false,
  user: {},
};

const LOG_IN = "LOG_IN"; // 액션의 이름
const LOG_OUT = "LOG_OUT"; // 액션의 이름

const loginAction = {
  type: LOG_IN,
  data: {
    nickname: "kyg",
  },
};

const logoutAction = {
  type: LOG_OUT,
};

const reducer = (state = initialState, action) => {
  switch (action.type) {
    case LOG_IN: {
      return {
        ...state,
        isLoggedIn: true,
        user: action.data,
      };
    }
    case LOG_OUT: {
      return {
        ...state,
        isLoggedIn: false,
        user: action.data,
      };
    }

    default:
      break;
  }
};
