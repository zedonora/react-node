import React from "react";
import PostForm from "../components/PostForm";
import PostCard from "../components/PostCard";
import { useDispatch, useSelector } from "react-redux";
import { loginAction, LOG_OUT } from "../reducers/user";

const dummy = {
  isLoggedIn: true,
  imagePaths: [],
  mainPosts: [
    {
      User: {
        id: 1,
        nickname: "kyg",
      },
      content: "첫 번째 게시글",
      img: "./3.jpg",
    },
  ],
};

const Home = () => {
  const dispatch = useDispatch();
  const { isLoggedIn, user } = useSelector((state) => state.user);
  // componentdidmount
  useEffect(() => {
    dispatch(loginAction);
    dispatch({
      type: LOG_OUT,
    });
    dispatch({
      type: LOG_IN,
      data: {
        nickname: "kyg",
      },
    });
  }, []);

  return (
    <>
      <div>
        {user ? (
          <div>로그인 했습니다: {user.nickname} </div>
        ) : (
          <div>로그아웃 했습니다.</div>
        )}
        {dummy.isLoggedIn && <PostForm />}
        {dummy.mainPosts.map((c) => {
          return <PostCard key={c} post={c} />;
        })}
      </div>
    </>
  );
};

export default Home;
