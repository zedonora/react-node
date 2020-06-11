// user 정보만 담고 있는 store
const dummyUser = {
  nickname: "kyg",
  Post: [],
  Followings: [],
  Followers: [],
  isLoggedIn: false,
  signUpData: {
    id: "",
    nick: "",
    password: "",
  },
};
// 초기값
export const initialState = {
  isLoggedIn: false,
  user: null,
};

export const SIGN_UP = "SIGN_UP"; // 액션의 이름
export const SIGN_UP_SUCCESS = "SIGN_UP_SUCCESS"; // 액션의 이름
export const LOG_IN = "LOG_IN"; // 액션의 이름
export const LOG_IN_SUCCESS = "LOG_IN_SUCCESS"; // 액션의 이름
export const LOG_IN_FAILURE = "LOG_IN_FAILURE"; // 액션의 이름
export const LOG_OUT = "LOG_OUT"; // 액션의 이름

export const loginAction = {
  type: LOG_IN,
  data: {
    nickname: "kyg",
  },
};

export const signUpSuccessAction = {
  type: SIGN_UP_SUCCESS,
};

export const loginSuccessAction = {
  type: LOG_IN_SUCCESS,
};

export const loginFailureAction = {
  type: LOG_IN_FAILURE,
};

export const logoutAction = {
  type: LOG_OUT,
};
// 동적 데이터는 함수를 만들어야 한다.
export const signUpAction = (data) => {
  return {
    type: SIGN_UP,
    data: data,
  };
};
export default (state = initialState, action) => {
  switch (action.type) {
    case SIGN_UP: {
      return {
        ...state,
        signUpData: action.data,
      };
    }
    case SIGN_UP_SUCCESS: {
      return {
        ...state,
      };
    }
    case LOG_IN: {
      return {
        ...state,
        isLoggedIn: true,
        user: dummyUser,
      };
    }
    case LOG_IN_SUCCESS: {
      return {
        ...state,
      };
    }
    case LOG_IN_FAILURE: {
      return {
        ...state,
      };
    }
    case LOG_OUT: {
      return {
        ...state,
      };
    }
    default:
      return state;
  }
};
