export const initialState = {
  mainPosts: [],
};

const ADD_POST = "ADD_POST";
const ADD_DUMMY = "ADD_DUMMY";

export const addPost = {
  type: ADD_POST,
};

export const addDummy = {
  type: ADD_DUMMY,
  data: {
    content: "Hello",
    UserId: 1,
    User: {
      nickname: "kyg",
    },
  },
};

const reducer = (state = initialState, action) => {
  switch (action.type) {
    case ADD_POST: {
      return {
        ...state,
      };
    }
    case ADD_DUMMY: {
      return {
        ...state,
        mainPosts: [actions.data, ...state.mainPosts],
      };
    }
    default:
      break;
  }
};
export default reducer;
