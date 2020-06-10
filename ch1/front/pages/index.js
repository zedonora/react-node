import React from "react";
import PostForm from "../components/PostForm";
import PostCard from "../components/PostCard";
//import { connect } from "react-redux";
import { useDispatch, useSelector } from "react-redux";
import { loginAction, LOG_OUT } from "../reducers/user";

//const Home = ({ user, dispatch, login, logout }) => {
const Home = () => {
  const { isLoggedIn } = useSelector((state) => state.user);
  const { mainPosts } = useSelector((state) => state.post);

  return (
    <div>
      {isLoggedIn && <PostForm />}
      {mainPosts.map((c) => {
        return <PostCard key={c} post={c} />;
      })}
    </div>
  );
};

export default Home;
