import React, { useContext, createContext, useState } from "react";

interface UserInput {
  email: string;
  password: string;
}

interface AuthContextType {
  isAuth: Boolean;
  login: () => void;
  register: () => void;
  logout: () => void;
}

export const AuthContext = createContext<AuthContextType>();

const AuthContextProvider = ({ children }: any) => {
  const [isAuth, setAuth] = useState(false);
  const login = () => {
    setAuth(true);
  };
  const register = () => {
    setAuth(true);
  };
  const logout = () => {
    setAuth(false);
  };
  return (
    <AuthContext.Provider
      value={{
        login,
        register,
        logout,
        isAuth,
      }}
    >
      {children}
    </AuthContext.Provider>
  );
};

export default AuthContextProvider;
