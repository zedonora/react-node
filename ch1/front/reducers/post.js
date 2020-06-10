export const initialState = {
    mainPosts: [{
        User: {
            id: 1,
            nickname: "kyg",
        },
        content: "첫 번째 게시글",
        img: "https://bookthumb-phinf.pstatic.net/cover/137/995/13799585.jpg?update=20180726",
    }, ],
    imagePaths: [],
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

export default (state = initialState, action) => {
    switch (action.type) {
        case ADD_POST:
            {
                return {
                    ...state,
                };
            }
        case ADD_DUMMY:
            {
                return {
                    ...state,
                    mainPosts: [actions.data, ...state.mainPosts],
                };
            }
        default:
            return state;
    }
};